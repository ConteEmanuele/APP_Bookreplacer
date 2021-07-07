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

    let result = await fetch('http://localhost:3000/published');
    let data = await result.json();

    for( let i = 0; i < data.length; i++ ){
        
        let clone = template.content.cloneNode(true);

        let title = clone.getElementById("title_");
        title.innerHTML = data[i].title;
        title.id += (i+1);

        let author = clone.getElementById("author_");
        author.innerHTML = data[i].author;
        author.id += (i+1);

        let publisher = clone.getElementById("publisher_");
        publisher.innerHTML = data[i].publisher;
        publisher.id += (i+1);

        let year = clone.getElementById("year_");
        year.innerHTML = data[i].year;
        year.id += (i+1);

        let conditions = clone.getElementById("conditions_");
        conditions.innerHTML = data[i].conditions;
        conditions.id += (i+1);

        table.appendChild(clone);

    }
}