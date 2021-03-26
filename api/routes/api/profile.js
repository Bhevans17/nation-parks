const express = require("express");
const router = express.Router();

/* Register a user. */
router.post("/", function (req, res, next) {
  res.send("respond with a profile");
});

module.exports = router;
