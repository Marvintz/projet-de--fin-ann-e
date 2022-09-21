const contener_favoris = document.querySelector('#contener_favoris')
fetch('../data/favoris.php')
    .then(res => res.json())
    .then(json => {
        for (var i = 0; i < json.length; i++){
            const favoris = document.createElement("a");
            favoris.setAttribute('href', json[i].map);

            const text_img = document.createElement("div");

            const image_entreprise = document.createElement("div");

            const image = document.createElement("img");
            image.setAttribute('src',json[i].image1);
            image_entreprise.appendChild(image);

            const texte_favoris = document.createElement("div");

            const texte1 = document.createElement("p");
            texte1.innerHTML = json[i].nom;
            texte_favoris.appendChild(texte1);

            const texte2 = document.createElement("p");
            texte2.innerHTML = json[i].ville;
            texte_favoris.appendChild(texte2);

            const texte3 = document.createElement("p");
            texte3.innerHTML = json[i].type_commerce;
            texte_favoris.appendChild(texte3);

            text_img.appendChild(image_entreprise);
            text_img.appendChild(texte_favoris);

            const form = document.createElement("form");
            form.setAttribute("method", "post");
            form.setAttribute("action", "favoris.php");

            const submit_form = document.createElement("input");
            submit_form.setAttribute("type", "submit");
            submit_form.setAttribute("value", "✖");
            submit_form.setAttribute("name", "delete_favoris");
            const id_commerce = document.createElement("input");

            id_commerce.setAttribute("type", "hidden");
            id_commerce.setAttribute("value", json[i].id_favoris);
            id_commerce.setAttribute("name", "id_favoris");
            form.appendChild(submit_form);
            form.appendChild(id_commerce);

            favoris.appendChild(text_img);
            favoris.appendChild(form);

            contener_favoris.appendChild(favoris);

            console.log(json[i])
        }
    })
    .catch(err => alert('Oops!'))