document.addEventListener('DOMContentLoaded', ()=>{
    const form = document.getElementById('cert_voucher_form');
    const submitButton = document.getElementById('submit');
    const resultsMessage = document.getElementById('results_message');

    form.addEventListener('submit', (e)=>{
        e.preventDefault();
        
        submitButton.disabled = true;
        
        const formData = new FormData(form);

        formData.append('security', voucherObj.nonce);
        formData.append('action', 'voucher_action');
        
        fetch(voucherObj.ajaxUrl, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success){
                resultsMessage.style.color = 'green';
            } else {
                resultsMessage.style.color = 'red';
                submitButton.disabled = false;
            }
            resultsMessage.innerText = data.data.message;
        })
        .catch(error => {
            resultsMessage.style.color = 'red';
            resultsMessage.innerText = error.message;
            submitButton.disabled = false;
        })
        .finally(()=>{
            submitButton.disabled = false;
        });
    });
});