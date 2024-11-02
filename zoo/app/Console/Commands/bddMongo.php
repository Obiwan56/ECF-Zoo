<?php

namespace App\Console\Commands;

use App\Models\AnimalVote;
use Illuminate\Console\Command;

class bddMongo extends Command
{
    // Le nom et la description de la commande
    protected $signature = 'mongo:contenu';
    protected $description = 'Afficher le contenu de la base de données MongoDB';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Récupérer le contenu de la collection MongoDB
        $contenu = AnimalVote::all();

        if ($contenu->isEmpty()) {
            $this->info('La base de données MongoDB est vide.');
        } else {
            $this->info("Contenu de la collection :");
            foreach ($contenu as $document) {
                $this->line($document); // Affiche chaque document dans la collection
            }
        }

        return Command::SUCCESS;
    }
}
