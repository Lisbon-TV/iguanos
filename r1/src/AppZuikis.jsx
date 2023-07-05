import './App.css';
import Komponentai from './components/Homework/Zuikis';
import Tekstas from './components/Homework/Zuikis';
import Zebras from './components/Homework/Zuikis';

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <div>
            <h1>REACT BASE</h1>
            {/* <Zuikis style={{color: 'pink'}} /> */}
            {/* <Tekstas type="text"/> */}
            <Zebras type="color"/>
        </div>      

      </header>
    </div>
  );
}

export default App;