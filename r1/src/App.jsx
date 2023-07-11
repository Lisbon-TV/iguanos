import {useState} from 'react';
import "./buttons.scss";
import "./App.scss";
import "bootstrap/dist/css/bootstrap.min.css";

function App() {

  const [text, setText] = useState('');
  const [range, setRange] = useState('14');

  const handleChange = e => {
      setText(e.target.value);
  }

  const handleChangeRange = e => {
    setRange(e.target.value);
}

  return (
    <div className="container">
      <div className="row">
        <div className="col-4">
          <div className="card mt-4">
            <h1 className="card-header">New Person</h1>
            <div className="card-body">
              <fieldset>
                <legend>Social Network Lover</legend>
                <div className='mt-3'>
                  <input type="text" value={text} onChange={handleChange} />
                </div>
                <div className='mt-3'>
                  <label>{range.padStart(2, "0")}</label>
                  <input type="range" min="14"  max="99" value={range} onChange={handleChangeRange}/>
                </div >
                <button className="red" onClick={(_) => setText("Hello!")}>
                  Add
                </button>
              </fieldset>
            </div>
          </div>
        </div>
        <div className="col-8">Column</div>
      </div>
    </div>
  );
}

export default App;
