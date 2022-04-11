async function autoip(event){
    event.preventDefault()
    const reponse = await fetch("http://collabeez.fr/?swname=SW_xxx")
    const json = await reponse.json()
    const input_ip = document.getElementById('ip')
    input_ip.value = json.ipconf.ip
}