
function carregar() {
    var msg = window.document.getElementById('msg')
    var data = new Date()
    var hora = data.getHours()
   
    
   
   
    if (hora >= 5 && hora <12) {
        // BOM DIA!
        msg.innerHTML = `Bom dia, `
        document.body.style.background = '#fdad5f'
    }
        
        else if (hora >= 12 && hora < 18){
            // BOA TARDE!
             msg.innerHTML = `Boa tarde, ` 
             document.body.style.background = '#a95327'
        }
        else {
            // BOA NOITE!
            msg.innerHTML = `Boa noite, `
            document.body.style.background = '#939395'
        }
    }
