import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class TypeuserService {
  Api = "http://127.0.0.1:8000/api"
  constructor(private http: HttpClient) { }
  getTypeusers() {
    return this.http.get<any>(this.Api + '/typeusers');
  }
  deleteTypeusers(id) {
    return this.http.delete<any>(this.Api + '/typeusers/' + id);
  }
  getTypeusersById(id) {
    return this.http.get<any>(this.Api + '/typeusers/' + id);
  }
  updateTypeuser(user: any) {
    return this.http.put<any>(this.Api + '/typeusers/' + user.id, user);
  }
  createTypeuser(user: any) {
    return this.http.post<any>(this.Api + '/addtypeusers', user);
  }
}
