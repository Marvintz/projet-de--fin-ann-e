let recherche = ""
let categorie = ""
const search_bar_list = document.querySelector('#search_bar_list')  
search_bar_list.addEventListener('change', (e) => {  
    if (e.target.value == ""){
        recherche = ""
        categorie = ""
        document.querySelector('#filter_bar_list').style.display = "flex";
        document.querySelector('#all_result_liste').style.display = "flex";
        document.querySelector('#filter_commerce').style.display = "none";
        document.querySelector('#all_commerce').style.display = "none";
    }
    else{
        categorie = ""
        recherche = e.target.value
        create_commerces()
        document.querySelector('#filter_bar_list').style.display = "none";
        document.querySelector('#all_result_liste').style.display = "none";
        document.querySelector('#filter_commerce').style.display = "flex";
        document.querySelector('#all_commerce').style.display = "block";
    }
});
document.getElementById("hotel").onclick = function(){
    categorie = "hotel"
    recherche = ""
    create_commerces()
    document.querySelector('#filter_bar_list').style.display = "none";
    document.querySelector('#all_result_liste').style.display = "none";
    document.querySelector('#filter_commerce').style.display = "flex";
    document.querySelector('#all_commerce').style.display = "block";
};
document.getElementById("restaurant").onclick = function(){
    categorie = "restaurant"
    recherche = ""
    create_commerces()
    document.querySelector('#filter_bar_list').style.display = "none";
    document.querySelector('#all_result_liste').style.display = "none";
    document.querySelector('#filter_commerce').style.display = "flex";
    document.querySelector('#all_commerce').style.display = "block";
};
document.getElementById("shopping").onclick = function(){
    categorie = "shopping"
    recherche = ""
    create_commerces()
    document.querySelector('#filter_bar_list').style.display = "none";
    document.querySelector('#all_result_liste').style.display = "none";
    document.querySelector('#filter_commerce').style.display = "flex";
    document.querySelector('#all_commerce').style.display = "block";
};
document.getElementById("station").onclick = function(){
    categorie = "station"
    recherche = ""
    create_commerces()
    document.querySelector('#filter_bar_list').style.display = "none";
    document.querySelector('#all_result_liste').style.display = "none";
    document.querySelector('#filter_commerce').style.display = "flex";
    document.querySelector('#all_commerce').style.display = "block";
};
document.getElementById("pharmacie").onclick = function(){
    categorie = "pharmacie"
    recherche = ""
    create_commerces()
    document.querySelector('#filter_bar_list').style.display = "none";
    document.querySelector('#all_result_liste').style.display = "none";
    document.querySelector('#filter_commerce').style.display = "flex";
    document.querySelector('#all_commerce').style.display = "block";
};
function create_commerces(){
    const all_commerces = document.querySelector('#all_commerce')
    while (all_commerces.firstChild) { 
        all_commerces.removeChild(all_commerces.firstChild); 
    }
    fetch('../data/commerces.php')
    .then(res => res.json())
    .then(json => {
        for (var i = 0; i < json.length; i++){
            if (categorie == "" && recherche != "" && json[i].nom.toLowerCase().includes(recherche.toLowerCase())){
                const commerce = document.createElement("a");
                commerce.setAttribute('href', json[i].map);
                // creation div des 3 images
                const all_image_commerce = document.createElement("div");

                const image1 = document.createElement('img');
                image1.setAttribute('src',json[i].image1);
                all_image_commerce.appendChild(image1);

                const image2 = document.createElement('img');
                image2.setAttribute('src',json[i].image2);
                all_image_commerce.appendChild(image2);

                const image3 = document.createElement('img');
                image3.setAttribute('src',json[i].image3);
                all_image_commerce.appendChild(image3);

                // creation div des 3 span
                const all_texte_commerce = document.createElement("div");

                const nom = document.createElement('span');
                nom.innerHTML = json[i].nom;
                all_texte_commerce.appendChild(nom);

                const avis = document.createElement('span');
                avis.innerHTML = json[i].note_avis + ' <img src="img/coeur.svg" alt=""> ' + '(' + json[i].nombre_avis + ' avis)';
                all_texte_commerce.appendChild(avis);

                const type = document.createElement('span');
                type.innerHTML = json[i].type_commerce;
                all_texte_commerce.appendChild(type);

                const form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "liste.php");

                const submit_form = document.createElement("input");
                submit_form.setAttribute("type", "submit");
                submit_form.setAttribute("value", "Favoris");
                submit_form.setAttribute("name", "submit_favoris");

                const id_commerce = document.createElement("input");
                id_commerce.setAttribute("type", "hidden");
                id_commerce.setAttribute("value", json[i].id_commerce);
                id_commerce.setAttribute("name", "id_commerce");

                form.appendChild(submit_form);
                form.appendChild(id_commerce);

                // ajout des div au parent
                commerce.appendChild(all_image_commerce);
                commerce.appendChild(all_texte_commerce);
                commerce.appendChild(form);

                all_commerces.appendChild(commerce);
            }
            if (recherche == "" && categorie != "" && json[i].type_commerce.includes(categorie)){
                const commerce = document.createElement("a");
                commerce.setAttribute('href', json[i].map);
                // creation div des 3 images
                const all_image_commerce = document.createElement("div");

                const image1 = document.createElement('img');
                image1.setAttribute('src',json[i].image1);
                all_image_commerce.appendChild(image1);

                const image2 = document.createElement('img');
                image2.setAttribute('src',json[i].image2);
                all_image_commerce.appendChild(image2);

                const image3 = document.createElement('img');
                image3.setAttribute('src',json[i].image3);
                all_image_commerce.appendChild(image3);

                // creation div des 3 span
                const all_texte_commerce = document.createElement("div");

                const nom = document.createElement('span');
                nom.innerHTML = json[i].nom;
                all_texte_commerce.appendChild(nom);

                const avis = document.createElement('span');
                avis.innerHTML = json[i].note_avis + ' <img src="img/coeur.svg" alt=""> ' + '(' + json[i].nombre_avis + ' avis)';
                all_texte_commerce.appendChild(avis);

                const type = document.createElement('span');
                type.innerHTML = json[i].type_commerce;
                all_texte_commerce.appendChild(type);

                const form = document.createElement("form");
                form.setAttribute("method", "post");
                form.setAttribute("action", "liste.php");

                const submit_form = document.createElement("input");
                submit_form.setAttribute("type", "submit");
                submit_form.setAttribute("value", "Favoris");
                submit_form.setAttribute("name", "submit_favoris");

                const id_commerce = document.createElement("input");
                id_commerce.setAttribute("type", "hidden");
                id_commerce.setAttribute("value", json[i].id_commerce);
                id_commerce.setAttribute("name", "id_commerce");

                form.appendChild(submit_form);
                form.appendChild(id_commerce);

                // ajout des div au parent
                commerce.appendChild(all_image_commerce);
                commerce.appendChild(all_texte_commerce);
                commerce.appendChild(form);

                all_commerces.appendChild(commerce);
            }
        }
    })
    .catch(err => alert('Oops!'))
}