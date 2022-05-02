import time
import requests
import threading
import numpy as np
import datetime
from flask import Flask, request
import numpy
import sklearn
import pathlib
import pickle

from sklearn.cluster import KMeans

# function to find different weeks between 2 unix timestamp


def find_different_weeks(start_time, end_time):
    converted_d1 = datetime.datetime.fromtimestamp(int(start_time))
    converted_d2 = datetime.datetime.fromtimestamp(int(end_time))
    return int((converted_d1 - converted_d2).days / 7)


app = Flask(__name__)

loaded_model = pickle.load(
    open(str(pathlib.Path().resolve()) + "/model", 'rb'))


@app.route("/predict")
def hello_world():
    args = request.args.to_dict()
    # todo 1: input hanya ada 3. interval keseluruhan, total donor kesluruhan, riwayat waktu donor keseluruhan
    input1 = float(args["p1"])  # interval kesluruhan
    input2 = float(args["p2"])  # total donor keseluruhan
    # riwayat waktu donor keseluruhan
    input3 = np.array(args["p3"].split(",")).reshape(-1, 1)
    # todo 2: gunakan k means untuk membedakan riwayat waktu donor keseluruan menjadi 2 bagian
    # bagian yang ke 2 adalah yang dipakai, panjang dari kelompok ke 2 itu adalah total donor sekarnag
    # sedangkan interval skearang didapat dari waktu pertama dari kelompok 2 sampai sekarang dalam minggu dibagi total donor sekarang
    # print(input3)
    kmeans = KMeans(n_clusters=2, random_state=0).fit(input3)
    # result dari kmeans, array terdiri dari 0 dan 1
    labels = kmeans.labels_
    # mengroup kan mana yang cluster 0 mana yang cluster 1
    label0 = []
    label1 = []
    for i, label in enumerate(labels):
        if label == 0:
            label0.append(input3[i])
        else:
            label1.append(input3[i])
    # mencari tanggal pertama dari cluster yang terbaru
    min_tanggal_0 = min(label0)
    min_tanggal_1 = min(label1)
    min_tanggal_now = max(min_tanggal_0, min_tanggal_1)

    # karena k means membagi menjadi 2 grup yaitu now dan old kita harus tau yang 0 itu new atau old
    cluster_now = label0 if min_tanggal_0 > min_tanggal_1 else label1
    weeks_now = abs(find_different_weeks(min_tanggal_now,
                    datetime.datetime.now().timestamp()))
    interval_now = weeks_now/len(cluster_now)
    totaldonor_now = len(cluster_now)
    result = kmeans.predict(input3)
    # return "test"
    inputs = [[input1, interval_now, input2, totaldonor_now]]
    # return ','.join(str(e) for e in inputs)
    # return f"""weeks_now: {weeks_now}, interval_now: {interval_now},
    # totaldonor_now: {totaldonor_now}, len label0: {len(label0)}, len label1: {len(label1)},
    # cluster_now :{0 if min_tanggal_0 > min_tanggal_1 else 1},
    # cluster0:  [{','.join(str(e) for e in label0)}],
    # cluster1: [{','.join(str(e) for e in label1)}],
    # min_tanggal_now: {min_tanggal_now},
    #  min_tanggal_0: {min_tanggal_0},
    #   min_tanggal_1: {min_tanggal_1},
    #   now: {datetime.datetime.now().timestamp()}
    #   labels: [{','.join(str(e) for e in labels)}]"""
    # input disini adalah array dari waktu donor
    # write k means model from sklearn library

    result = loaded_model.predict(inputs)
    return str(result[0])

# dipanggil oleh search.php untuk menvisualisasi 2 cluster yang baru warna biru yang lama warna merah


@app.route("/cluster")
def clustering():
    args = request.args.to_dict()
    # riwayat waktu donor keseluruhan
    input = np.array(args["p1"].split(",") + [int(time.time())]).reshape(-1, 1)

    kmeans = KMeans(n_clusters=2, random_state=0).fit(input)
    # result dari kmeans, array terdiri dari 0 dan 1
    labels = kmeans.labels_
    label0 = []
    label1 = []
    new = 1 if labels[0] == 0 else 0
    old = 1 if labels[0] == 1 else 0
    result = ["old" if label == old else "new" for label in labels]
    result.pop(-1)  # remove the last index
    return ','.join(str(e) for e in result)
    for i, label in enumerate(labels):
        if label == 0:
            label0.append(input3[i])
        else:
            label1.append(input3[i])


def set_interval(func, sec):
    def func_wrapper():
        set_interval(func, sec)
        func()
    t = threading.Timer(sec, func_wrapper)
    t.start()
    return t


def refresh():
    print("make refresh request...")
    r = requests.get(url="http://apache/utilities/refresh.php")
    # print(r.status_code)
    print(r)
    # print(r.text())
    # print(f"response from apache: {r.text()}")


set_interval(refresh, 60)


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)  # when debug mode port is 5000
