function [a] = Newton(x,y)
n = length(x);

a(1) = y(1);

for k = 1 : n-1
    
    % first divided difference
    
    d(k, 1) = (y(k+1)-y(k))/(x(k+1)-x(k));
    
end

for j = 2 : n-1
    for k = 1 : n-j
        
        d(k,j) = (d(k+1,j-1) - d(k,j-1))/(x(k+j) - x(k));
        
        % jth divided difference
        
    end
end

for j = 2 : n
    
    a(j) = d(1,j-1);
    
end
