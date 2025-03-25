/* Copyright (c) 2017-present Tesler, All Rights Reserved. */
"use strict";

function buildLink() {
    // document.getElementById("s4-link").href = "/upload/?type=" + linkParts.type + "&time=" + linkParts.time + "&count=" + linkParts.count
}

function selectOption(e, t) {
    for (var n = document.getElementsByClassName("question")[e].getElementsByClassName("options")[0], i = 0; i < n.children.length; i++) t == i ? n.children[i].className = "" : n.children[i].className = "blur"
}
var unitTipe = "",
    unitPrice = .02,
    linkParts = {
        type: -1,
        time: -1,
        count: -1
    },
    stepListeners = [function(e) {
        switch (selectOption(0, e), linkParts.type = e, buildLink(), e) {
            case 0:
                unitTipe = "minute";
                break;
            case 1:
                unitTipe = "word";
                break;
            case 2:
                unitTipe = "word"
        }
        for (var t = 0; t < document.getElementsByClassName("unit").length; t++) document.getElementsByClassName("unit")[t].innerHTML = unitTipe;
        document.getElementById("s2").style.display = "block", setTimeout(function() {
            document.getElementById("s2").style.opacity = 1
        }, 100)
    }, function(e) {
        selectOption(1, e), linkParts.time = e, buildLink(), document.getElementById("s3").style.display = "block", setTimeout(function() {
            document.getElementById("s3").style.opacity = 1
        }, 100)
    }];
document.addEventListener("DOMContentLoaded", function() {
    for (var e = document.getElementsByClassName("question"), t = 0; t < e.length; t++)
        if (1 == e[t].getElementsByClassName("options").length)
            for (var n = e[t].getElementsByClassName("options")[0], i = 0; i < n.children.length; i++) {
                var s = function(e, t, n) {
                    e.addEventListener("click", function() {
                        stepListeners[t](n)
                    })
                };
                s(n.children[i], t, i)
            }
    document.getElementById("s3-input").addEventListener("input", function(e) {
        if(e.target.value > 0) {
            document.getElementById("s4-price").innerHTML = Math.round( parseFloat(e.target.value) * unitPrice * 100) / 100, linkParts.count = parseFloat(e.target.value), buildLink(), document.getElementById("s4").style.display = "block", setTimeout(function() {
                document.getElementById("s4").style.opacity = 1
            }, 100)
        } else {
            document.getElementById("s4-price").innerHTML = '';
        }
    })
});