const express = require("express");
var cors = require('cors')
const server = express();

server.use(cors())

const body_parser = require("body-parser");
server.use(body_parser.json());

const port = process.env.DB_CONNECTION_PORT | 8001;
const db = require("./db");
const dbName = process.env.MONGO_DB | "UIDAI";
const collectionName = "UIDAI";

db.initialize(
    dbName,
    collectionName,
    function(dbCollection) {
        dbCollection.find().toArray(function(err, result) {
            if (err) throw err;
        });

        server.get("/find/:aadhar_no", (request, response) => {
            const aadharNumber = request.params.aadhar_no;
            dbCollection.findOne(
                { aadhar_no: aadharNumber },
                (error, result) => {
                    if (error) throw error;
                    response.json(result);
                }
            );
        });
    },
    function(err) {
        throw err;
    }
);

server.listen(port, () => {
    console.log(`Server listening at ${port}`);
});
