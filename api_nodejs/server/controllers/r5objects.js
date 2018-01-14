const r5objects = require('../models').R5OBJECTS;

module.exports = {
    list(req, res) {
        return r5objects
            .findAll({ limit: 20 })
            .then(r5objects => res.status(200).send(r5objects))
            .catch(error => res.status(400).send(error));
    },
};