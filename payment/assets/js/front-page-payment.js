"use strict";
! function() {
    var e = document.querySelector(".billings-zip-code"),
        n = document.querySelector(".billing-card-mask"),
        t = document.querySelector(".billing-expiry-date-mask"),
        r = document.querySelector(".billing-cvv-mask"),
        c = document.querySelectorAll(".form-check-input-payment");
    e && new Cleave(e, {
        delimiter: "",
        numeral: !0
    }), n && new Cleave(n, {
        creditCard: !0,
        onCreditCardTypeChanged: function(e) {
            document.querySelector(".card-type").innerHTML = "" != e && "unknown" != e ? '<img src="' + assetsPath + "img/icons/payments/" + e + '-cc.png" height="28"/>' : ""
        }
    }), t && new Cleave(t, {
        date: !0,
        delimiter: "/",
        datePattern: ["m", "y"]
    }), r && new Cleave(r, {
        numeral: !0,
        numeralPositiveOnly: !0
    }), c && c.forEach(function(e) {
        e.addEventListener("change", function(e) {
            "credit-card" === e.target.value ? document.querySelector("#form-credit-card").classList.remove("d-none") : document.querySelector("#form-credit-card").classList.add("d-none")
        })
    })
}();