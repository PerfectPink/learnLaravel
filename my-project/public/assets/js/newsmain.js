let workplace = document.getElementById('newsworkplace');
let newsItemTmpl = document.getElementById('newsItem-tmpl');
// let newsFullItemTmpl = documen.getElementById('');
let retryQuanity = 0;

function renderNews(specificType){
    // if (retryQuanity < 0){
    //     workspaceclear('newsworkplace');
    // }else{
    //     //pass
    // }
    // workspaceclear('newsworkplace');
    let newsdata = null;
    console.log('clear workspace');
    let url = 'http://localhost:8000/api/getNews?type=' + specificType;
    let image
    newsdata = senderGet(url)
    console.log(newsdata);
    newsdata = JSON.parse(newsdata)
    workspaceclear("newsworkplace");
    newsdata.forEach(element => {
        workplace.innerHTML += newsItemTmpl.innerHTML.replace("--id",element.id)
        .replace("--title",element.title)
        .replace("--category",element.category)
        .replace("--views",element.views)
        .replace("--likes",element.likes)
        .replace("--dislikes",element.dislikes)
        

    });

}
function renderSingleNews(targetNewsId){
    let url = "http://localhost:8000/api/getNews?type=single&newsId=" + targetNewsId;

    let response = senderGet(url);
    response = JSON.parse(response);
    console.log(response);
}







// function renderNews(Customcategory){
//     let xhr = new XMLHttpRequest;
//     let sendType

//     if (Customcategory == 'all') {
//         sendType = "ALL"
//     }else{
//         sendType = Customcategory;
//     }
//     xhr.open('GET','localhost:8000/getNews?datatype=' + sendType,false);
//     xhr.send();
//     let apiResponse = xhr.responseText;
//     console.log(apiResponse); 
// }


//utility functions
function senderGet(url){
    let xhr = new XMLHttpRequest;
    xhr.open('GET',url,false);
    xhr.send();
    return xhr.responseText;
}
function senderPost(url,sendData){
    let xhr = new XMLHttpRequest;
    xhr.open('POST',url,false);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(sendData);
    return xhr.responseText;
}
function workspaceclear(target){ // string id name
    let targetElement = document.getElementById(target);
    targetElement.innerHTML = '';
}

//dev
window.onload = renderNews('all');