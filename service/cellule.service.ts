import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class CelluleService {
  Api = "http://127.0.0.1:8000/api"
  constructor(private http: HttpClient) { }
  getCellules() {
    return this.http.get<any>(this.Api + '/cellules');
  }
  deleteCellules(id) {
    return this.http.delete<any>(this.Api + '/cellules/' + id);
  }
  getCellulesById(id) {
    return this.http.get<any>(this.Api + '/cellules/' + id);
  }
  updateCellule(user: any) {
    return this.http.put<any>(this.Api + '/cellules/' + user.id, user);
  }
  createCellule(user: any) {
    return this.http.post<any>(this.Api + '/addcellules', user);
  }
}
