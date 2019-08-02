% This function implements the naive Gauss Elimination
% procedure. It takes in a matrix A and a column vector 
% b, to produce the solution x, assuming that the appropriate
% entries are non-zero and the matrix is invertible.

function x = Gauss(A,b)
[n, m] = size(b);

% Concatenating matrix A and column vector b

C = [A b];

% Row i as pivot

for i = 1 : n-1
    mm(i+1:n,i) = -C(i+1:n,i)/C(i,i);
    C(i+1:n,:) = C(i+1:n,:) + mm(i+1:n,i)*C(i,:);  % Elimination on the rest of the rows
end

% Back substitution

x(n,1) = C(n,n+1)/C(n,n);
for i = n-1 : -1 : 1
    x(i,1) = (C(i,n+1)-C(i,i+1:n)*x(i+1:n,1))/C(i,i);
end