import './App.css';
import Animal from './components/004/animal';

// const bu = _ >

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <h1>Hello Props!</h1>
        <Animal type="racoon" animalColor="skyblue" />
        <Animal type="cat" color="crimson" />
      </header>
    </div>
  );
}

export default App;
