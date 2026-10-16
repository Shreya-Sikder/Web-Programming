let h = [];
let o = [];

document.getElementById("btn").addEventListener("click", function () {
    let heart_rate = Number(document.getElementById("HR").value);
    let oxy_sat = Number(document.getElementById("OS").value);

    h.push(heart_rate);
    o.push(oxy_sat);
    let sum_h = 0;
    for (let i = 0; i < h.length; i++) {
        sum_h += h[i];
    }
    let avg_hr = sum_h / h.length;

    let sum_o = 0;
    for (let i = 0; i < o.length; i++) {
        sum_o += o[i];
    }
    let avg_os = sum_o / o.length;
    let riskScore = (100 - oxy_sat) * 2 + Math.abs(heart_rate - 80) * 0.5;
    let feedback = "";
    if (riskScore <= 10) feedback = "safe";
    else if (riskScore <=20) feedback = "warning";
    else feedback = "danger";
    document.getElementById("output").innerHTML = `average heart rate:${avg_hr}<br> average oxygen saturation:${avg_os.toFixed(2)}<br>risk score:${riskScore}<br>feedback:${feedback}`

});