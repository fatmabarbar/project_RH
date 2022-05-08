import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class AutorisationdesortieService {

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
  getAutorisationdesorties() {
    return this.http.get<any>(this.Api + '/Autorisationdesortiess');
  }
  deleteAutorisationdesorties(id) {
    return this.http.delete<any>(this.Api + '/Autorisationdesorties/' + id);
  }
  getAutorisationdesortiesById(id) {
    return this.http.get<any>(this.Api + '/Autorisationdesorties/' + id);
  }
  updateAutorisationdesorties(user: any) {
    return this.http.put<any>(this.Api + '/Autorisationdesorties/' + user.id, user);
  }
  createAutorisationdesorties(user: any) {
    return this.http.post<any>(this.Api + '/addAutorisationdesorties', user);
  }
}
