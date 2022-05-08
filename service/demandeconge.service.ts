import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class DemandecongeService {
  Api = "http://127.0.0.1:8000/api"
  constructor(private http: HttpClient) { }
  getdemandeconges() {
    return this.http.get<any>(this.Api + '/demandeconges');
  }
  deletedemandeconges(id) {
    return this.http.delete<any>(this.Api + '/demandeconges/' + id);
  }
  getdemandecongesById(id) {
    return this.http.get<any>(this.Api + '/demandeconges/' + id);
  }
  updatedemandeconge(user: any) {
    return this.http.put<any>(this.Api + '/demandeconges/' + user.id, user);
  }
  createdemandeconge(user: any) {
    return this.http.post<any>(this.Api + '/adddemandeconges', user);
  }
}
