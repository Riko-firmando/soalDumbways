function birthDead(jml, hari){
    let loop = hari / 21 ;

    for(let i = 1 ; i <= loop ; i++){
        jml -= 11.1 / 100 * jml;
        jml += 1;
    }
    return jml;
}

console.log( birthDead(6969, 441))
