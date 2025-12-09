
import { startStimulusApp } from '@symfony/stimulus-bridge';
import '@hotwired/turbo'; // se estiver usando turbo
import './styles/app.css'; // ou .scss se for o caso

// Importa todos os controllers de controllers.json (gerado pelo make:stimulus-controller)
const app = startStimulusApp();
app.debug = true;
