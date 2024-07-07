from flask import Flask  , render_template,request,make_response,jsonify,url_for,redirect,Response
import numpy as np
import pandas as pd
import operator
import requests
from pyDecision.algorithm import edas_method
from pyDecision.algorithm import ahp_method
import json
from flask_cors import CORS


# Connect to the MySQL database



app = Flask(__name__)
CORS(app, resources={r"/*": {"origins": "http://127.0.0.1:8000"}}) 

@app.route("/test" , methods=['GET'])
def testing():
    return "hello"

@app.route("/post-rank" , methods=['POST'])
def postRank():
    
    #AHP menentukan Weight
    dataset = np.array([
    #C1     C2     C3     C4     C5     C6     C7
    [1         ,3              ,5         ,7           ,9         ,7 ],   #C1
    [1/3       ,1              ,3         ,5           ,7         ,5],   #C2
    [ 1/5      ,1/3            ,1         ,3           ,5         ,3],   #C3
    [1/7       ,1/5            ,1/3       ,1           ,3         ,1],   #C4
    [ 1/9       ,1/7            ,1/5       ,1/3         ,1         ,1/3],   #C5
    [ 1/7       ,1/5            ,1/3       ,1           ,3         ,1],   #C6
    ])
    
    
    weight_derivation = 'max_eigen' # 'mean'; 'geometric' or 'max_eigen'
    weights, rc = ahp_method(dataset, wd = weight_derivation)
    resultsW = []
    for i in range(0, weights.shape[0]):
        resultsW.append(round(weights[i], 3))
        # print('w(g'+str(i+1)+'): ', round(weights[i], 3))
        
    print('RC: ' + str(round(rc, 2)))
    if (rc > 0.10):
        print('The solution is inconsistent, the pairwise comparisons must be reviewed')
    else:
        print('The solution is consistent')

    data = request.json['negaras']
    print(data)
    
    df = pd.DataFrame(data)
    nama = df["negara"]

    columns_of_interest = ['C1', 'C2', 'C3','C4','C5','C6']
    dataset = df[columns_of_interest].values
    
    criterion_type = ['max', 'min', 'min','min', 'min', 'min']
    
    # weights = [0.2, 0.2, 0.1, 0.1, 0.05, 0.05]

    rank = edas_method(dataset, criterion_type, resultsW,graph = False, verbose = False)

    hasil = []
    
    for i in range(0, rank.shape[0]):
        hasil.append({
            "negara_peringkat":nama[i],
            "alternative":'a' + str(i+1),
            "score":round(rank[i], 6)
        })

    sorted_list = sorted(hasil, key=lambda x: x['score'], reverse=True)
   

    send_data = json.dumps(sorted_list)
    
    return send_data


if __name__ == "__main__":
    app.run()        
    
