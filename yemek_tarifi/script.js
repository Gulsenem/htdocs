let results = document.getElementById("results");

let produktnamen  = 
[
    "Tasche",
    "Kühlschrank",
    "Arbeitshose",
    "Kühltasche",
    "Kühltruhe",
    "Kühlbox",
    "Jacke",
    "Kopftuch",
    "Kommode",
    "Hemd",
    "Tarkan",
    "tarhana",
    "tatata"

]

function tip(el)
 {
     
    let  s = el.value.toLowerCase();
    if(s.length<2)
     {
        results.style.display= 'none';
        return;
    }   
      
    let treffer= []; 
    
    for(produkt of produktnamen)
    {
         if(produkt.toLowerCase().includes(s))
         {
            treffer.push(produkt);
            let div = document.createElement('div');
            div.innerHTML = produkt;
            results.appendChild(div);
            
         }

        
    }

    if(treffer.length == 0)
        results.style.display= 'none';

    else
        results.style.display = 'block';
    
 }