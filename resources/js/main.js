const customerId = document.getElementById("customerId"),
    invoiceNumbers = document.getElementById("invoiceNumbers"),
    chequeNumbers = document.getElementById("chequeNumbers")


async function postData(req) {

    return await fetch(req.url, {
        method: 'post',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(req.body)
    })
        .then(res => res.ok ? res.json() : { 'success': false, 'msg': 'Response failed!' })
        .catch(error => { return { 'success': false, 'msg': error, 'occured_in': 'Catch block of postData()' } })

}

async function processForm() {
    const req = {url: "controller/invoiceFormController.php", body: {customerId: customerId, invoiceNumbers: invoiceNumbers, chequeNumbers: chequeNumbers}}
    const res = await postData(req)
    console.log(res)
}