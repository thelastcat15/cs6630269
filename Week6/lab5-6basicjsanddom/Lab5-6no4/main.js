window.onload = function(){
    let cars = new Array('Audi','BMW','Ford','Opel','Toyota');
    let days = new Array('Monday', 'Wednesday','Friday');
    let jobs = new Array('engineer ','salesman');

    function SwapOption(nC) {
        co.options.length = 0;
        for (let i = 0; i < nC.length; i++)
            co.options[co.length] = new Option(nC[i], nC[i]);
    }

    let co = document.forms[0].combo1;

    let carRadio = document.getElementById("carRadio")
    let daysRadio = document.getElementById("daysRadio")
    let jobsRadio = document.getElementById("jobsRadio")

    carRadio.addEventListener('click',function(){
        SwapOption(cars)
    })
    daysRadio.addEventListener('click',function(){
        SwapOption(days)
    })
    jobsRadio.addEventListener('click',function(){
        SwapOption(jobs)
    })
}