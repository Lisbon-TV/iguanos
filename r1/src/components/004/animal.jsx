function (animal) {

//     if (type == 'racoon') {
//         return (
//             <div>
//                 <h1>RACOON</h1>
//             </div>
//         );
//     } else if (type === 'cat') {
//         return (
//             <div>
//                 <h1>RACOON</h1>
//             </div>
//         );
//     } else {
//         return (
//             <div>
//                 <h1>ANIMAL</h1>
//             </div>
//         );
//     }
// }

    return (
    <div style={{
        color: "pink",
        fontFamily: 'monospace',
        letterSpacing: '15px',
    }}>
        <h1>
            {
                type === 'racoon'
                ?
                'RACOON'
                :
                type === 'cat'
                ?
                'CAT'
                :
                'ANIMAL'
            }
        </h1>
    </div>
    );
}



export default animal;