let a = ['W', 'U', 'V','A'];
let b = ['d','c', 'b', 'a']
let c = ['M', 'L', 'O', 'N']

function sortArr(arr){
    for(let i = 0 ; i < arr.length ; i++ ){  // c
        for(let j = 0; j < arr.length - 1 ; j++){  // c < d => cdba, b < c => bdca, c < d => bcda , 
            if(arr[i] < arr[j]){
                temp = arr[i];
                arr[i] = arr[j];
                arr[j] = temp;
            }
        }
    }

    return arr;
}

console.log(sortArr(a))
console.log(sortArr(b))
console.log(sortArr(c))