import { TestBed } from '@angular/core/testing';

import { AutorisationdesortieService } from './autorisationdesortie.service';

describe('AutorisationdesortieService', () => {
  let service: AutorisationdesortieService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(AutorisationdesortieService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
