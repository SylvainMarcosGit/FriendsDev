<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

      // Méthode pour afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('user/inscription');// Assurez-vous d'avoir une vue pour le formulaire d'inscription
    }

     // Méthode pour traiter les données du formulaire d'inscription
     public function register(Request $request)
     {
         // Validation des données du formulaire
         $validatedData = $request->validate([
             'username' => 'required',
             'email' => 'required',
             'telephone' => 'required', // Vous pouvez ajouter des règles de validation supplémentaires
             'password' => 'required' ,// La règle confirmed vérifie si le champ confirm_password correspond à password
         ]);
 
         // Création d'un nouvel utilisateur
         $user = Utilisateurs::create([
             'username' => $validatedData['username'],
             'email' => $validatedData['email'],
             'telephone' => $validatedData['telephone'],
             'password' => bcrypt($validatedData['password']), // Assurez-vous d'hasher le mot de passe
         ]);
 
         // Vous pouvez effectuer d'autres actions après l'inscription, par exemple, rediriger l'utilisateur vers une page spécifique avec un message de succès
         return redirect('/signup')->with('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter.');
     }

    // Méthode pour afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('user/connexion');// Assurez-vous d'avoir une vue pour le formulaire de connexion
    }
        // Méthode pour traiter les données du formulaire de connexion
       public function login(Request $request)
       {
          // Valider les données du formulaire
          $credentials = $request->validate([
              'email' => 'required|email',
              'password' => 'required',
          ]);
  
          // Tentative de connexion de l'utilisateur
          if (Auth::attempt($credentials)) {
              // Authentification réussie, rediriger vers la page d'accueil
              return redirect('accueil');
          } else {
              // Si l'authentification échoue, rediriger avec un message d'erreur ou gérer autrement
              return redirect('connexion')->with('error', 'Identifiants incorrects');
          }
      }
  
      // Méthode pour se déconnecter
      public function logout(Request $request)
      {
          Auth::logout();
  
          $request->session()->invalidate();
  
          $request->session()->regenerateToken();
  
          return redirect('/'); // Redirection après la déconnexion
      }
  
  
      public function adminController(){
          return view('admin/accueil');
  
      }
    
/*--------------------------------------------- */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
