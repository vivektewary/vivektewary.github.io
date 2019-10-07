function x = Jacobi(A, b, x0, tol, maxit)
% Inputs and Outputs
% A      n by n coefficient matrix
% b      right hand side (n by 1)
% x0     initial guess (n by 1)
% tol    stop iteration if norm of change in x < tol
% maxit  maximum number of iterations
% x      solution vector (n by 1)

[n, m] = size(A);
xold = x0;
C = -A;

for i = 1 : n
    C(i,i)=0;
end

for i = 1 : n
    C(i,:) = C(i,:)/A(i,i);
end

for i = 1 : n
    d(i,1) = b(i)/A(i,i)
end

disp(' i  x1  x2  x3  ...');

i = 1;

while (i<=maxit)
    xnew = C * xold + d;
    if norm(xnew-xold) <= tol
        x = xnew;
        disp('Answer'); return;
    else 
        xold = xnew;
    end
    disp([i   xnew']);
    i = i + 1;
end
disp('results after maximum number of iterations');
x = xnew;