function e = QR_eig_basic(A, maxit)
% find eigenvalues of Hessenberg Matrix
% using QR factorization function called
% QR_factor_Hess
for i = 1 : maxit
    % A = QR => R = Q'A
    [Q R] = QR_factor_Hess(A);
    % define new A = RQ = Q'AQ
    A = R*Q;
end
A
e = diag(A)