const ranges = [[48, 57], [65, 90], [97, 122]];
let captcha = document.getElementById("captcha");

function gen_index(){
    let range = ranges[Math.floor(Math.random() * ranges.length)];
    return range[0] + Math.floor(Math.random() * (range[1] - range[0] + 1));
}

function gen_word(){
    let word = "";
    for (let i = 0; i < 8; i++){
        word += String.fromCharCode(gen_index());
    }
    captcha.innerHTML = word;
}