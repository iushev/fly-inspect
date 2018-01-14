const r5events = require('../models').R5EVENTS;

module.exports = {
    list(req, res) {
        return r5events
            .findAll({ limit: 20 })
            .then(r5events => res.status(200).send(r5events))
            .catch(error => res.status(400).send(error));
    },
};