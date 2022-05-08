import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Cellule } from '../api/cellule';
import { Typeuser } from '../api/typeuser';


@Injectable({
  providedIn: 'root'
})
export class UtilisateurService {
  /* Cellules: Cellule[];
   cellule = new Cellule();
   typeusers: Typeuser[];
   typeuser = new Typeuser();*/


  Api = "http://127.0.0.1:8000/api"
  constructor(private http: HttpClient) {
    /*this.Cellules = [];
    this.typeusers = [];*/
  }
  /*listeCellule(): Cellule[] {
    return this.Cellules;
  }

  consulterCellule(code: any): Cellule {
    this.cellule = this.Cellules.find(cel => cel.code == code);
    return this.cellule;
  }
  listeTypeuser(): Typeuser[] {
    return this.typeusers;
  }
  consulterTypeuser(code: any): Typeuser {
    this.typeuser = this.typeusers.find(tu => tu.code == code);
    return this.typeuser;
  }*/
  getUtilisateurs() {
    return this.http.get<any>(this.Api + '/utilisateurs');
  }
  deleteUtilisateurs(id) {
    return this.http.delete<any>(this.Api + '/utilisateurs/' + id);
  }
  getUtilisateursById(id) {
    return this.http.get<any>(this.Api + '/utilisateurs/' + id);
  }
  updateUtilisateur(user: any) {
    return this.http.put<any>(this.Api + '/utilisateurs/' + user.id, user);
  }
  createUtilisateur(user: any) {
    return this.http.post<any>(this.Api + '/addutilisateurs', user);
  }
  getUtilisateursByemail(email) {
    return this.http.get<any>(this.Api + '/utlisateur/login/' + email);
  }
}
