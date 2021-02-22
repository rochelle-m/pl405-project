from __future__ import print_function
from flask import Flask, jsonify, abort
from flask_cors import CORS
import pymongo
import  sys

connection_url = ''
app = Flask(__name__)
CORS(app)


@app.route("/")
def henlo_world():
    return "Henlo"


client = pymongo.MongoClient(connection_url)

Database = client.get_database('UIDAI')
UIDAI = Database.UIDAI


@app.route('/find/<value>/', methods=['GET'])
def findOne(value):
    queryObject = {'aadhar_no': value}
    query = UIDAI.find_one(queryObject)
    print(query, flush=True)
    if query is not None:
        query.pop('_id')
        response = jsonify(query)
        response.headers.add('Access-Control-Allow-Origin', '*')
        return response
    return jsonify({"error": "Aadhar number not found"})


if __name__ == '__main__':
    app.run(host='127.0.0.1', port=8001)
