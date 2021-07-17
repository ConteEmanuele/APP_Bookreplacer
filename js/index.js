let table = document.getElementById("books");
let template = document.getElementById("templateRow");
let total = document.getElementById("total");
let available = document.getElementById("available");
let gifted = document.getElementById("gifted");

getStats();
getLatest();


async function getStats(){

    let result = await fetch('http://localhost:3000/stats');
    let data = await result.json();
    
    total.innerHTML = data[0].total;
    available.innerHTML = data[0].available;
    gifted.innerHTML = data[0].gifted;

}

async function getLatest(){

    let result = await fetch('http://127.0.0.1:8000/api/en/book');
    let books = await result.json();
    console.log( books );

    for( let i = 0; i < books.data.length; i++ ){
        
        let clone = template.content.cloneNode(true);

        let title = clone.getElementById("title_");
        title.innerHTML = books.data[i].title;
        title.id += (i+1);

        let author = clone.getElementById("author_");
        author.innerHTML = books.data[i].author;
        author.id += (i+1);

        let publisher = clone.getElementById("publisher_");
        publisher.innerHTML = books.data[i].publisher;
        publisher.id += (i+1);

        let year = clone.getElementById("year_");
        year.innerHTML = books.data[i].year;
        year.id += (i+1);

        let status = clone.getElementById("status_");
        status.innerHTML = books.data[i].status;
        status.id += (i+1);

        table.appendChild(clone);

    }
}