import { useState } from 'react';

// function Input() {

//     const [text, setText] = useState('');

//     const handleChange = e => {
//         if (e.target.value.length > 10) {
//             return;
//         }
//         setText(e.target.value);
//     }

//     return (
//         <fieldset>
//             <legend>One text input</legend>
//             <div>left: {10 - text.length}</div>
//             <div>
//                 <input type="text" value={text} onChange={handleChange} />
//             </div>
//             <button className="red small" onClick={_ => setText('Hello')}>Hello</button>
//             <button className="red small" onClick={_ => setText('Bye, bye')}>Bye, bye</button>
//             <button className="red small" onClick={_ => setText('OK')}>OK</button>
//         </fieldset>
//     );
// }

// function Input () {

//     return (
//       <div>
//              <input type="text" />
//       </div>
//     );

function Input () {

const [text, setText] = useState('');

const handleChange = e => {
    // setText(e.target.value);
    if (e.target.value.length > 10) {
        return;
    }
    setText(e.target.value);
}


    return (
        <fieldset>
            <legend>One input text</legend>
                <div>Input: {text}</div>
            <div>Left: {10 - text.length}</div>
            <div>
            <input type="text" value={text} onChange={handleChange} />
            </div>
            <button className='red small' onClick={_ => setText('Hello!')}>Labas!</button>
            <button className='red small' onClick={_ => setText('Bye!')}>Viso!</button>
        </fieldset>
    );
}

export default Input;