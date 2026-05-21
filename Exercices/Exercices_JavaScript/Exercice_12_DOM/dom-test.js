// function paraReplace(sentance) {
//     let paragraphs = document.getElementsByTagName('p');
//     for(let i = 0; i < paragraphs.length; i++) {
//         paragraphs[i].innerText = `This is the test number ${sentance[i]}`;
//     }
// }

// let sentance = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// paraReplace(sentance);

const lesTxt = document.getElementsByTagName('p');
console.log(lesTxt);

const textesTab = Array.from(lesTxt);
console.log(textesTab);

textesTab.map(text => {text.textContent = "Ceci est un test"; text.style.color = "red"});