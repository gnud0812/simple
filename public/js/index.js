$(function (){
    let username = '';
    let password = '';
    $('.login-button').on('click' , function (){
        username =  $('#username').val();
        password =  $('#password').val();
        dangNhap(username, password)
    })

})

function axiosTemplate(method = 'GET', url = '', param = null, data =  null){
     return axios({
        method: method,
        url: url,
        param : param,
        data: data,
    });
}

async function dangNhap(username , password){
    let method = 'POST',
        url = 'simple.sign-in',
        param = null,
        data = {
            'username' : username,
            'password' : password,
        };
    let res = await axiosTemplate(method,url,param,data);
    if(res.data.status === 200){
        alert(res.data.message)
    }else {
        alert(res.data.message);
    }
}


