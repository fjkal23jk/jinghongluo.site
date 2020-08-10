function handelSubmit(){
    let data = {};
    let form = document.getElementById('form');
    for(el of form.elements){
        if(el.name !== ''){
            if(el.value === ''){
                alert('Please Fill All In');
                return;
            }
            data[el.name] = el.value.trim();
        }
    }
    if(document.getElementById('grade-select').value === ''){
        alert('Please Fill All In');
        return;
    }
    data['grade'] = document.getElementById('grade-select').value;
    data['date'] = new Date();
    console.log(data);

    let toast = document.getElementById('form_update');
    fetch('https://httpbin.org/post', {
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(postResponse => {
        toast.innerHTML = 'HTTP Request Received Successfully with Name: ' + postResponse['json']['name'];
        toast.className = 'show';
        setTimeout(function(){
            toast.className = toast.className.replace('show', '');
        }, 3000);  
    })
    for(el of form.elements){
        el.value = '';
    }
    document.getElementById('grade-select').value = '';
}


document.getElementById('submit').addEventListener('click', handelSubmit);