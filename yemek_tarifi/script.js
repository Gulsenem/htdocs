// sec_text onmouseover & onmouseout
let text = document.getElementById("gelb_section");
function text1()
{
    text.innerHTML = "Eine gute Küche ist das Fundament allen Glücks"
}

function text2()
{
    text.innerHTML = "Selbstgebacken schmeckt am besten!"
}






// autocomplete

let results = document.getElementById("results");




function sorgu_yolla()
{
    fetch('autocomplete.php')
    .then(function(cevap)
    {
       return cevap.json()
    })
    .then(function(cevapJson)
    {
        console.log(cevapJson);
    })

}


var result = [];
for(var i of cevapJson)
  result.push([i, cevapJson[i]]);
  console.log(result);

/*
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
*/

function tip(el)
 {
     
    let  s = el.value.toLowerCase();
    if(s.length<2)
     {
        results.style.display= 'none';
        return;
    }   
      
    let treffer= []; 
    
    for(produkt of sorgu_yolla())
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