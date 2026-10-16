let study_goal = 20;
let subjects = [];
let study_hour = [];
document.getElementById("btn").addEventListener("click", function () {
    let subject = document.getElementById("subject").value;
    let hours = Number(document.getElementById("hours").value);
  subjects.push(subject);
    study_hour.push(hours);
    console.log(subjects, study_hour);
    //total study hours
    let total = 0;
    for (let i = 0; i < study_hour.length; i++) {
        total += study_hour[i];
    }
    console.log("total study hour:" + total);
    let average = total / study_hour.length;
    console.log("average study hour:" + average);
    console.log(subject);
    let feedback = "";
    if (total >= 20)  feedback = "weekly goal reached";
    else if (total >= 13 && total <= 19) feedback = "almost ready";
    else if (total >= 6 && total <= 12) feedback = "good progress";
    else if (total >= 0 && total <= 5) feedback = "start studying regularly!";
    else feedback="die";
    if (study_hour.length > 7 && total < goal)  feedback="increase your study time";
    document.getElementById("output").innerHTML=`total:${total}<br>average:${average}<br>subjects:[${subjects}]<br>feedback:${feedback}`
})
