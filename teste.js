function divCloser(string) {
    let  brack = 0;
    let  divClosed = '';
    let  lastDiv = ''
    for(let i=0; i<string.length;i++){
        if(string[i] == '<' && brack != 2){
            divClosed += string[i];
            brack++;
        } else if (string [i] == '>' && brack != 2 ){
            divClosed += string[i];
            brack++;
        } else if (string [i] == '<') {            
            divClosed += string[i];
                if(string[i+1] != '/'){
                    divClosed += '/';
                    brack =0;
                } else {
                    brack = 0;
                }           
        } else {
            divClosed += string[i];
        }
    }
    return divClosed;    
}
console.log(divCloser("<div><p><div>Hello</p><div><div>"));

