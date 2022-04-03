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
    # input2 = int(args["p2"])
    inputs = [[input1]]

    result = loaded_model.predict(inputs)
    return str(result[0])





if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80) # when debug mode port is 5000