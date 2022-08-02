addEventListener("DOMContentLoaded", (e)=>{
    let from = document.querySelector("#calculadora");
    from.addEventListener("submit", async(e)=>{
        e.preventDefault();
        if(e.submitter.localName != "input"){
            from.dataset.operador  = e.submitter.value
        }else{
            let input = new FormData(e.target);
            let data = Object.fromEntries(input.entries());
            data.operador = from.dataset.operador;
            let config = {
                method: from.method,
                body: JSON.stringify(data)
            };
            let peticion = await fetch(from.action, config);
            let json = await peticion.text();
            document.querySelector("#resultado").innerHTML = JSON.stringify(json);
        }
    })
})