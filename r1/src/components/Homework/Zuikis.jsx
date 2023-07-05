// //Nr. 1

// function Zuikis() {

//     return (
//     <div>
//         <h1 style={{color: 'pink'}}>Labas, Zuiki!</h1>
//     </div>
//     )
// }

// export default Zuikis;

// //Nr. 2

// function Tekstas ({text}) {

//     return (
//         <div>
//             <h1>Bet koks tekstas!</h1>
//         </div>
//         )
    
// }

//export default Tekstas;

// Nr. 3

function Zebras ({color}) {
    if (color === 1) {
        return (
            <div>
                <h1 style={{color: 'blue'}}>Zebrai ir bebrai!</h1>
            </div>
            )  
    }
    if (color === 2) {
        return (<div>
            <h1 style={{color: 'red'}}>Zebrai ir bebrai!</h1>
        </div>
        )  
    }
}

export default Zebras;