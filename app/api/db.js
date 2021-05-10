require('dotenv').config()

const MongoClient = require('mongodb').MongoClient;

const dbConnectionUrl = process.env.DB_CONNECTION_MONGO;

function initialize(dbName, dbCollectionName, successCallback, failureCallback) {
    MongoClient.connect(dbConnectionUrl, { useUnifiedTopology: true }, function(err, dbInstance) {
        if (err) {
            console.log(`[MongoDB connection] ERROR: ${err}`);
            failureCallback(err);
        } else {
            const dbObject = dbInstance.db(dbName);
            const dbCollection = dbObject.collection(dbCollectionName);
            successCallback(dbCollection);
        }
    });
}

module.exports = {
    initialize
};