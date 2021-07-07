let table = document.getElementById("books");
let template = document.getElementById("templateRow");

getReservations();

async function getReservations(){

    let user = table.dataset.email;
    let endpoint = "http://localhost:3000/orders/" + user;

    let result = await fetch(endpoint);
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