from flask import Flask, request
import numpy
import sklearn
import pathlib
import pickle
app = Flask(__name__)

loaded_model = pickle.load(open(str(pathlib.Path().resolve()) + "/model", 'rb'))

@app.route("/predict")
def hello_world():
    args = request.args.to_dict()
    input1 = float(args["p1"]) # float tidak boleh di int kan
    input2 = float(args["p2"])
    input3 = float(args["p3"])
    input4 = float(args["p4"])
    inputs = [[input1,input2,input3,input4]]

    result = loaded_model.predict(inputs)
    return str(result[0])


import threading
import requests
def set_interval(func, sec):
    def func_wrapper():
        set_interval(func, sec)
        func()
    t = threading.Timer(sec, func_wrapper)
    t.start()
    return t

def refresh():
    print("make refresh request...")
    r = requests.get(url = "http://apache/utilities/refresh.php")
    # print(r.status_code)
    print(r)
    # print(r.text())
    # print(f"response from apache: {r.text()}")

set_interval(refresh,60)


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80) # when debug mode port is 5000